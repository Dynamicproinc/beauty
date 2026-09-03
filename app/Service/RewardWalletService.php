<?php

namespace App\Service;
use App\Models\RewardWallet;
use App\Models\RewardWalletTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\ReferralTracker;

class RewardWalletService
{
    public function getRewardWalletByUserId($userId)
    {
        return RewardWallet::where('user_id', $userId)->first();
    }

    public function createOrUpdateRewardWallet($user_id, $amount, $type, $description, $referral_code)
    {
        // user_id is wallet owner , amount is the amount he give, $type is which source wallet recive point (purchase reward etc), $description is about transaction order id , user something like that
       db::transaction(function () use ($user_id, $amount, $type, $description, $referral_code) {
           

            $reward_wallet = RewardWallet::where('user_id', $user_id)->first();
            if(!$reward_wallet){

                $rw = new RewardWallet();
                $rw->user_id = $user_id;
                $rw->balance = $amount;
                $rw->status = 'success';
                $rw->expiry_date = now()->addYear();
                $rw->save();
                $this->createRewardWalletTransaction($rw, $amount, $type, $description);

                
            }else{

            $reward_wallet->balance = $reward_wallet->balance + $amount;
            $reward_wallet->expiry_date = now()->addYear();
            $reward_wallet->save();
            $this->createRewardWalletTransaction($reward_wallet, $amount, $type, $description);
            }
            // send email
            $user = User::find($user_id);
            if($user){
                $this->sendEmailNotification($user, $amount, $type);
            }
            // $this->sendEmailNotification($user, $amount, $type);
            $this->addReferralTracker($referral_code, 'purchase');




           
        });
    }

    public function createRewardWalletTransaction($rewardWallet, $amount, $type, $description = null)
    {
        return RewardWalletTransaction::create([
            'reward_wallet_id' => $rewardWallet->id,
            'user_id' => $rewardWallet->user_id,
            'amount' => $amount,
            'type' => $type,
            'description' => $description,
        ]);
    }

    public function sendEmailNotification($user, $amount)
    {
        // Implement email notification logic here
        // For example, you can use Laravel's Mail facade to send an email
        // send raw email that informing user that he received reward points and how much and what type of reward points

        $message = "Congratulations! You have received $amount reward points. Check your reward wallet for more details.";
        Mail::raw($message, function ($mail) use ($user) {
            $mail->to($user->email)
                 ->subject('Reward Points Notification');
        });

    }

    public function addReferralTracker($referral_code, $type)
    {
       $rt = ReferralTracker::create([
            'referral_code' => $referral_code,
            'ip_address' => request()->ip(),
            'type' => $type,
            'status' => 'success',
        ]);
        return $rt;
    }
   
}
<?php

namespace App\Livewire\Web\Signup;

use Livewire\Component;

class Signup extends Component
{
    public function submitRegister($phoneNumber){
        $otp = rand(100000, 999999); // Generate 6-digit OTP
        $expiry = date('Y-m-d H:i:s', strtotime('+5 minutes')); // OTP expires in 5 minutes
        $isUsed = 0;
        // Store OTP in MySQL
        $conn = new mysqli('localhost', 'root', '', 'your_database');
        $stmt = $conn->prepare("INSERT INTO otp_auth (phone_number, otp_code, expiry_time, is_used) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $phoneNumber, $otp, $expiry, $isUsed);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        // Twilio credentials

        $sid = getenv('TWILIO_SID');
        $token = getenv('TWILIO_AUTH_TOKEN');
        $twilioNumber = getenv('TWILIO_PHONE_NUMBER');
        $client = new Client($sid, $token);
        // Send OTP via SMS
        $client->messages->create(
            $phoneNumber,
            [
                'from' => $twilioNumber,
                'body' => "Your OTP is: $otp. It will expire in 5 minutes."
            ]
        );

        return $this->redirect(route('login'));

    }
    public function render()
    {
        return view('livewire.web.signup.signup');
    }
}

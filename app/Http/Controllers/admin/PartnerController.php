<?php

namespace App\Http\Controllers\admin;

use App\CareerMessage;
use App\PartnerMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Mail;

class PartnerController extends Controller
{
    public function getPartnerIndex() {
        $partner_messages = PartnerMessage::all();
        return view('admin.pages.partner.index')->with('partner_messages', $partner_messages);
    }

    public function returnMailBlade(Request $request) {
        $emails = CareerMessage::find($request->id);
        return view('emails.replyPartner')->with('emails', $emails);
    }

    public function returnMailBladeSms(Request $request) {
        $emails = CareerMessage::find($request->id);
        return view('emails.replyPartnerSms')->with('emails', $emails);
    }

    public function sendMail(Request $request) {
        $user_mail = $request->input('user_email');
        $reply     = $request->input('message');

        $rules = [
            'message' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        Mail::send('admin.pages.message-draft.message_blade', ['user_mail'  => $user_mail, 'reply' => $reply],
            function($message) use ($user_mail, $reply) {
                $message->from('arabea169@gmail.com', 'Mec');
                $message->to($user_mail)->subject('Hakeem Partners');
            });

        session()->push('m', 'success');
        session()->push('m', 'Message Sent Successfully');
        return redirect()->back();
    }

    public function sendSms(Request $request) {
        $credentials = new Nexmo\Client\Credentials\Basic('15024e54', '08814e1db54495ef');
        $client = new Nexmo\Client($credentials);

        $message = $client->message()->send([
            'from' => 'Hakeem.com',
            'to' => $request->input('user_email'),
            'text' => $request->input('message'),
        ]);

        session()->push('m', 'success');
        session()->push('m', 'Sent Successfully');

        return redirect()->back();
    }

    public function deleteMessagePartner(Request $request) {
        $delete = PartnerMessage::find(($request->id));
        $delete->delete();
        session()->push('m', 'success');
        session()->push('m', 'Deleted Successfully');
        return redirect()->back();
    }
}

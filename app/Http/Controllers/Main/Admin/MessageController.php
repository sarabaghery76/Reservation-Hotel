<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\MessageRequest;
use App\Models\Contact_Us;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Contact_Us::all();
        return view(('Main.Admin.message.index'),compact('messages'));
    }

    public function delete($message_id)
    {
        if($message_id && ctype_digit($message_id))
        {
            Contact_Us::destroy($message_id);
        }
    }
    public function edit($message_id)
    {
        if($message_id && ctype_digit($message_id))
        {
            $messageItem = Contact_Us::find($message_id);
            if ($messageItem && $messageItem instanceof Contact_Us)
            {
                return view(('Main.Admin.message.edit'),compact('messageItem'));
            }
        }
    }
    public function update(MessageRequest $messageRequest,$message_id)
    {
        if($message_id && ctype_digit($message_id))
        {
            $inputs = [
                'name'=> request()->input('name') ,
                'message' => request()->input('message'),
            ];
            $messageItem = Contact_Us::find($message_id);
            $messageItem->Update($inputs);
            return redirect()->route('admin.message.index');
        }
    }


}

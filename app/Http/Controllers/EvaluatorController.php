<?php

namespace App\Http\Controllers;

use App\Models\Evaluator;
use App\Models\Notification;
use App\Models\plotting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class EvaluatorController extends Controller
{
    //
    public function evaluator()
    {
        $users = Auth::user();
        return view('Evaluator.dashboard', compact('users'));
    }

    public function penugasan()
    {
        $users = Auth::User();
        $notifs = Notification::where('notifiable_id', $users->id)
            ->where('read_at', null)
            ->get()
            ->take(1);
        return view('Evaluator.penugasan', compact('users', 'notifs'));
    }

    public function detail($id)
    {
        $users = Auth::User();
        $notifs = Notification::where('id', $id)->get();
        return view('Evaluator.penugasan', compact('users', 'notifs'));
    }

    public function setuju($id)
    {
        $users = Auth::User();
        $userUnreadNotification = $users
            ->unreadNotifications
            ->where('id', $id)
            ->first();

        if ($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
        }
        $data = Notification::where('id', $id)->value('data');
        $inner = $data['data'];
        $ideva = plotting::where('kode_periode', $inner['kode_periode'])
            ->where('nip', $users->nip)
            ->value('id_evaluator');

        $confirm = new Evaluator;
        $confirm->kode_periode = $inner['kode_periode'];
        $confirm->id_evaluator = $ideva;
        $confirm->nip          = $users->nip;
        $confirm->is_confirm   = 'Yes';
        $confirm->save();


        return redirect('/evaluator-dashboard')->with('info', 'Data telah dicatat');
    }

    public function tolak(Request $request, $id)
    {
        $users = Auth::User();
        $userUnreadNotification = $users
            ->unreadNotifications
            ->where('id', $id)
            ->first();

        if ($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
        }
        $data = Notification::where('id', $id)->value('data');
        $inner = $data['data'];
        $ideva = plotting::where('kode_periode', $inner['kode_periode'])
            ->where('nip', $users->nip)
            ->value('id_evaluator');

        $confirm = new Evaluator;
        $confirm->kode_periode = $inner['kode_periode'];
        $confirm->id_evaluator = $ideva;
        $confirm->nip          = $users->nip;
        $confirm->is_confirm   = 'No';
        $confirm->alasan       = $request->alasan;
        $confirm->save();


        return redirect('/evaluator-dashboard')->with('info', 'Data telah dicatat');
    }
}

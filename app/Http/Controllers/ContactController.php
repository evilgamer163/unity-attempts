<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller {

	public function submit (ContactRequest $request) {
		$contact = new Contact();
		$contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->theme = $request->input('theme');
		$contact->message = $request->input('message');

		$contact->save();

		return redirect()->route('home')->with('success', 'Сообщение успешно отправлено в БД!');
	}

	public function getData() {
		$contact = new Contact();
		// dd($contact->all());

		return view('messages', ['data' => $contact->inRandomOrder()->where('email', 'aspopov9@gmail.com')->take(1)->get()]);
		// return view('messages', ['data' => Contact::all()]);
	}
}

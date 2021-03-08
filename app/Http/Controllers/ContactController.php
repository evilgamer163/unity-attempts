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

		// return view('messages', ['data' => $contact->inRandomOrder()->where('email', 'aspopov9@gmail.com')->take(1)->get()]);
		return view('messages', ['data' => Contact::all()]);
	}

	public function showOneMas($id) {
		return view('one_msg', ['data' => Contact::find($id)]);
	}

	public function update($id) {
		$contact = new Contact();
		return view('update_msg', ['data' => $contact->find($id)]);
	}

	public function updateSubmit ($id, ContactRequest $request) {
		$contact = Contact::find($id); //выбрали запись
		$contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->theme = $request->input('theme');
		$contact->message = $request->input('message');

		$contact->save();

		return redirect()->route('contact-id-msg', $id)->with('success', 'Сообщение успешно отправлено в БД!');
	}

	public function deleteMsg($id) {
		Contact::find($id)->delete();
		return redirect()->route('contact-data')->with('success', 'Сообщение удалено!');
	}
}

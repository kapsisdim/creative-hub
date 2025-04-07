<?php

namespace App\Http\Controllers\Services;

use App\Models\ContactFormEntry;

class SaveFormEntryService
{
		public function save($firstName, $lastName, $email, $message)
		{
			$form_entry = new ContactFormEntry();
			$form_entry->first_name = $firstName;
			$form_entry->last_name = $lastName;
			$form_entry->email = $email;
			$form_entry->message = $message;

			if ($form_entry->save()) {
					return true;
			} else {
					return false;
			}
		}
}

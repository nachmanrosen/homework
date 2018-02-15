import { Component, OnInit } from '@angular/core';
import {Contact} from '../shared/contact';
import { ContactService } from '../shared/contact.service';
import { Subscription } from 'rxjs/Subscription';
import { Observable } from 'rxjs/Observable';
@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {
contacts: Contact[];
 
  constructor() { }

  ngOnInit() {
  }
  contact;
  name = '';
  phone='';
  email='';
  /*onKeyName(value: string) {
    this.name += value + ' | ';
}
onKeyPhone(value: number) {
    this.phone += value + ' | ';
}
onKeyEmail(value: string) {
    this.email += value + ' | ';
}
*/

add(name: string): void {
  name = name.trim();
  if (!name) { return; }

  this.ContactService.addContact({ name } as Contact)
    .subscribe(contact => {
      this.contacts.push(contact);
    });
}
}
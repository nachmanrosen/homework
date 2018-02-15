import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { Observable } from 'rxjs/Observable';
import {Contact} from './contact';
import { catchError, retry } from 'rxjs/operators';
import { ErrorObservable } from 'rxjs/observable/ErrorObservable';


@Injectable()
export class ContactService {
  handleError: any;
  private contactUrl = 'api/form';
  constructor(private http: HttpClient) { }
  
  addContact (contact:Contact): Observable<Contact> {
  return this.http.post<Contact>(this.contactUrl, contact)
    .pipe(catchError(this.handleError('addContact', contact))
    );
}
}


import { Component, OnInit,Input } from '@angular/core';
import{User, Post} from '../interface';
@Component({
  selector: 'app-blogs',
  templateUrl: './blogs.component.html',
  styleUrls: ['./blogs.component.css']
})
export class BlogsComponent implements OnInit {
@Input()
users: User[];
selectedUser: User;
  constructor() { }

  ngOnInit() {
  }
getUser(user){
 this.selectedUser= user;
}
}

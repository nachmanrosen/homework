import { Component } from '@angular/core';
import{User, Post } from './interface';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
 users: User[]=
 [{ name:'bob',
 posts :[{text:'hello',
 comments:['hi','bye']
 }]


}, 
{
  name:'dovid',
 posts :[{text:'thursday night',
 comments:['its late']},{
   text:'gmail',
   comments:['checked it']

 }
 ]


}]
}

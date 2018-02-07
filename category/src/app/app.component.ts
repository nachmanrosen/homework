import { Component } from '@angular/core';
import {Category, Item} from './category';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
categories: Category[] =[   {
   name:'meat',
   items :[{
      name:'chicken',
      price: 5.00
    } ,{
    name:'deli',
   price: 3.00
  } ]
},
{
    name:'dairy',
    items:[ {
   name:'milk',price:2.00
  },{name:'yogurt', price:0.80
}]
  },
{
    name:'drinks',
    items:[ 
  ]
  },
];
  
  

  }


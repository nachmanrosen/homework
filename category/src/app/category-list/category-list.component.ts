import { Component, OnInit, Input } from '@angular/core';
import {Category, Item} from '../category';
@Component({
  selector: 'app-category-list',
  templateUrl: './category-list.component.html',
  styleUrls: ['./category-list.component.css']
})
export class CategoryListComponent implements OnInit {
  @Input()
  categories: Category[];
  selectedCategory: Category;
  constructor() { }

  ngOnInit() {
  }
getItems(category){
 this.selectedCategory= category;
 console.log(category);
    }
}

import { Component, OnInit } from '@angular/core';
import {Contact} from '../shared/contact';
@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.css']
})
export class TableComponent implements OnInit {
contacts:Contact[];
  constructor() { }

  ngOnInit() {
  }

}

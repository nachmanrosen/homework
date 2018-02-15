import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { FormComponent } from './form/form.component';
import { TableComponent } from './table/table.component';

const route: Routes=[
{ path: 'form', component: FormComponent },
  { path: 'table', component: TableComponent },
  { path: '',
    redirectTo: '/form',
    pathMatch: 'full'
  },

];


@NgModule({
  declarations: [
    AppComponent,
    FormComponent,
    TableComponent
   

    
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
     RouterModule.forRoot(route,
     { enableTracing: true }
    )
  ],
    exports: [ RouterModule ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

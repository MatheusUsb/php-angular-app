import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router'; // Import RouterModule and Routes
import { AppComponent } from './app.component';
import { FormsModule } from '@angular/forms';
import { TasksComponent } from './tasks/tasks.component';

// Define your routes here
const appRoutes: Routes = [
  { path: 'tasks', component: TasksComponent },
  // Add more routes as needed
];

@NgModule({
  declarations: [
    AppComponent,
    TasksComponent,
    // Add other components here
  ],
  imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(appRoutes) // Add RouterModule to your imports
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
import { Component } from '@angular/core';
import { NgForm } from '@angular/forms';

@Component({
  selector: 'app-tasks',
  templateUrl: './tasks.component.html',
  styleUrls: ['./tasks.component.css']
})
export class TasksComponent {
  task = {
    title: '',
    description: ''
  };

  constructor() { }

  onSubmit(form: NgForm): void {
    console.log('Form submitted', form.value);
    // Here you would typically make a call to your service to handle the form submission
  }
}
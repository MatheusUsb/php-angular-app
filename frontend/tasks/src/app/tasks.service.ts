import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class TasksService {
  private apiUrl = 'http://localhost/tasks'; // URL do seu backend

  constructor(private http: HttpClient) { }

  getTasks(): Observable<any> {
    return this.http.get(`${this.apiUrl}/read.php`); // Corrigido para apontar para read.php
  }

  createTask(task: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/create.php`, task); // Corrigido para apontar para create.php
  }

  updateTask(task: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/update.php`, task); // Alterado para POST e corrigido para apontar para update.php
  }

  deleteTask(id: number): Observable<any> {
    return this.http.post(`${this.apiUrl}/delete.php`, {id}); // Alterado para POST e corrigido para apontar para delete.php
  }
}
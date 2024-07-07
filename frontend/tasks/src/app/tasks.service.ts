import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class TasksService {
  private apiUrl = 'http://localhost/api'; // Ajuste para a URL do seu backend

  constructor(private http: HttpClient) { }

  getTasks(): Observable<any> {
    return this.http.get(`${this.apiUrl}/tasks`);
  }

  createTask(task: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/tasks`, task);
  }

  updateTask(task: any): Observable<any> {
    return this.http.put(`${this.apiUrl}/tasks/${task.id}`, task);
  }

  deleteTask(id: number): Observable<any> {
    return this.http.delete(`${this.apiUrl}/tasks/${id}`);
  }
}
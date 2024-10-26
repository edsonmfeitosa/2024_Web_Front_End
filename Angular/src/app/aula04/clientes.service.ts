import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ClientesService {
  varGlobal: string = 'valor global';
  link: string = 'http://localhost:3000/clientes';

  constructor() { }
  getClientes(){
    return fetch(this.link).then(res => res.json());
  }
}

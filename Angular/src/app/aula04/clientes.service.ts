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
  adicionarCliente(cliente: any){
    return fetch(this.link, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(cliente)
    }).then(res => res.json());
  }
  excluirCliente(id: number) {
    return fetch(this.link + '/' + id, {
      method: 'DELETE'
    }).then(res => res.json());
  }
  alterarCliente(cliente: any) {
    return fetch(this.link + '/' + cliente.id, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(cliente)
    }).then(res => res.json());
  }
}

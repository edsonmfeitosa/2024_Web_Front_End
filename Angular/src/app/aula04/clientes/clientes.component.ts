import { Component } from '@angular/core';
import { ClientesService } from '../clientes.service';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrl: './clientes.component.scss',
})
export class ClientesComponent {
  constructor(private serv: ClientesService) {
    this.serv.getClientes().then((data) => {
      console.log(data);
    });
  }
}

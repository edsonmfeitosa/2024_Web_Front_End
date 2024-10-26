import { Component } from '@angular/core';
import { ClientesService } from '../clientes.service';

@Component({
  selector: 'app-diretiva-ngfor',
  templateUrl: './diretiva-ngfor.component.html',
  styleUrl: './diretiva-ngfor.component.scss'
})
export class DiretivaNgforComponent {
  listaGeral = ["Edson", 30, true];
  listaPessoas = [
    { nome: "Edson", idade: 30, ativo: true },
    { nome: "Maria", idade: 25, ativo: false },
    { nome: "João", idade: 40, ativo: true }
  ];
  global:string = '';
  constructor(private serv : ClientesService) {
      this.global = serv.varGlobal;

  }
}

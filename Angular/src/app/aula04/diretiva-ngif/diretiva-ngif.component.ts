import { Component } from '@angular/core';
import { ClientesService } from '../clientes.service';

@Component({
  selector: 'app-diretiva-ngif',
  templateUrl: './diretiva-ngif.component.html',
  styleUrl: './diretiva-ngif.component.scss'
})
export class DiretivaNgifComponent {
  mostraExemplo1: boolean = false;
  mostraExemplo2: boolean = false;
  mostraExemplo3: boolean = false;
  global:string = '';

  constructor(private serv : ClientesService) {
      this.global = serv.varGlobal;
   }

  exemplo1() {
    this.mostraExemplo1 = !this.mostraExemplo1;
  }
  exemplo2() {
    this.mostraExemplo2 = !this.mostraExemplo2;
  }
  exemplo3() {
    this.mostraExemplo3 = !this.mostraExemplo3;
  }
  atualizar(){
    this.serv.varGlobal = this.global;
  }

}

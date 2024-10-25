import { Component } from '@angular/core';

@Component({
  selector: 'app-diretiva-ngif',
  templateUrl: './diretiva-ngif.component.html',
  styleUrl: './diretiva-ngif.component.scss'
})
export class DiretivaNgifComponent {
  mostraExemplo1: boolean = false;
  mostraExemplo2: boolean = false;
  mostraExemplo3: boolean = false;

  exemplo1() {
    this.mostraExemplo1 = !this.mostraExemplo1;
  }
  exemplo2() {
    this.mostraExemplo2 = !this.mostraExemplo2;
  }
  exemplo3() {
    this.mostraExemplo3 = !this.mostraExemplo3;
  }

}

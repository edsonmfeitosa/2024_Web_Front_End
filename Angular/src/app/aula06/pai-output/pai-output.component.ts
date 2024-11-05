import { Component } from '@angular/core';

@Component({
  selector: 'app-pai-output',
  templateUrl: './pai-output.component.html',
  styleUrl: './pai-output.component.scss',
})
export class PaiOutputComponent {
  mensagemParaFilho: string = 'Oi filho! Tudo bem?';
  mensagemDoFilho: string = '';

  receberMensagem($event: string) {
    this.mensagemDoFilho = $event;
  }
}

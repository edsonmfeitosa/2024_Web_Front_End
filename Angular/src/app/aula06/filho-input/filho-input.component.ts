import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-filho-input',
  templateUrl: './filho-input.component.html',
  styleUrl: './filho-input.component.scss'
})
export class FilhoInputComponent {
  @Input() mensagem: string = '';
  @Output() mensagemParaPai = new EventEmitter<string>();

  enviarMensagem() {
    this.mensagemParaPai.emit('Olá, Pai!');
  }
}

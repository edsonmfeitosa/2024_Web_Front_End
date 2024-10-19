import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.scss'
})
export class LoginComponent {
  titulo = 'Tela de Login';
  usuario = 'edson.feitosa@facens.br';
  senha = '123456';
  erro: boolean = false;

  constructor(private router : Router) { }

  textoDigitado(texto: any)
  {
    console.log(texto);
  }
  entrar(){
    if (this.usuario == 'admin' && this.senha == 'admin') {
      this.router.navigate(['/principal']);
      
    } else {
      this.erro = true;
    }
  }
}

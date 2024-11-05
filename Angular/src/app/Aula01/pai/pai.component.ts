import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-pai',
  templateUrl: './pai.component.html',
  styleUrl: './pai.component.scss'
})
export class PaiComponent {
  
  constructor(private route: Router) { }

  mensagemFilho(){
    this.route.navigate(['/principal/pai/filho1/oi filho! Tudo bem?']);
  }
}

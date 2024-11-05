import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-filho1',
  templateUrl: './filho1.component.html',
  styleUrl: './filho1.component.scss'
})
export class Filho1Component {
  mensagem: string = '';

  constructor(private route: ActivatedRoute) { }

  ngOnInit() {
    this.mensagem = this.route.snapshot.params['mensagem'];
  }
}

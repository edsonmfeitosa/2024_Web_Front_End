import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PrimeiroComponenteComponent } from './Aula01/primeiro-componente/primeiro-componente.component';
import { PaiComponent } from './Aula01/pai/pai.component';
import { Filho1Component } from './Aula01/pai/filho1/filho1.component';
import { Filho2Component } from './Aula01/pai/filho2/filho2.component';
import { InterpolacaoComponent } from './aula02/interpolacao/interpolacao.component';
import { AulaPropertyBindingComponent } from './aula02/aula-property-binding/aula-property-binding.component';
import { AulaEventBindingComponent } from './aula02/aula-event-binding/aula-event-binding.component';
import { AulaAtributeBindingComponent } from './aula02/aula-atribute-binding/aula-atribute-binding.component';
import { TwoWayComponent } from './aula02/two-way/two-way.component';
import { LoginComponent } from './lista01/login/login.component';
import { PrincipalComponent } from './lista01/principal/principal.component';

const routes: Routes = [
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  { path: 'login', component: LoginComponent },
  {
    path: 'principal',
    component: PrincipalComponent,
    children: [
      { path: 'primeiro', component: PrimeiroComponenteComponent },
      {
        path: 'pai',
        component: PaiComponent,
        children: [
          { path: 'filho1', component: Filho1Component },
          { path: 'filho2', component: Filho2Component },
        ],
      },
      {
        path: 'aula02',
        loadChildren: () =>
          import('./aula02/aula02.module').then((m) => m.Aula02Module),
      },
      { path: 'interpolacao', component: InterpolacaoComponent },
      { path: 'propriedade', component: AulaPropertyBindingComponent },
      { path: 'evento', component: AulaEventBindingComponent },
      { path: 'atributo', component: AulaAtributeBindingComponent },
      { path: 'two', component: TwoWayComponent },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}

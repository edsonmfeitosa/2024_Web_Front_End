import { NgModule } from '@angular/core';
import { BrowserModule, provideClientHydration } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PrimeiroComponenteComponent } from './Aula01/primeiro-componente/primeiro-componente.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { MenuSuperiorComponent } from './Aula01/menu-superior/menu-superior.component';
import { RodapeComponent } from './Aula01/rodape/rodape.component';
import { PaiComponent } from './Aula01/pai/pai.component';
import { Filho1Component } from './Aula01/pai/filho1/filho1.component';
import { Filho2Component } from './Aula01/pai/filho2/filho2.component';
import { Aula02Module } from './aula02/aula02.module';
import { LoginComponent } from './lista01/login/login.component';
import { PrincipalComponent } from './lista01/principal/principal.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { DiretivasEstruturaisComponent } from './aula04/diretivas-estruturais/diretivas-estruturais.component';
import { ClientesComponent } from './aula04/clientes/clientes.component';
import { DiretivaNgifComponent } from './aula04/diretiva-ngif/diretiva-ngif.component';
import { DiretivaNgforComponent } from './aula04/diretiva-ngfor/diretiva-ngfor.component';
import { CadClienteComponent } from './aula05/cad-cliente/cad-cliente.component';




@NgModule({
  declarations: [
    AppComponent,
    PrimeiroComponenteComponent,
    MenuSuperiorComponent,
    RodapeComponent,
    PaiComponent,
    Filho1Component,
    Filho2Component,
    LoginComponent,
    PrincipalComponent,
    DiretivasEstruturaisComponent,
    ClientesComponent,
    DiretivaNgifComponent,
    DiretivaNgforComponent,
    CadClienteComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    Aula02Module,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    provideClientHydration()
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

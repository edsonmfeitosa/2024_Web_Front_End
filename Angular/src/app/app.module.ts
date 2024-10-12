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




@NgModule({
  declarations: [
    AppComponent,
    PrimeiroComponenteComponent,
    MenuSuperiorComponent,
    RodapeComponent,
    PaiComponent,
    Filho1Component,
    Filho2Component
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    Aula02Module,
  ],
  providers: [
    provideClientHydration()
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

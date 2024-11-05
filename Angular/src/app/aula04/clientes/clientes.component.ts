import { Component, inject } from '@angular/core';
import { ClientesService } from '../clientes.service';
import { NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { CadClienteComponent } from '../../aula05/cad-cliente/cad-cliente.component';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrl: './clientes.component.scss',
})
export class ClientesComponent {
  clientes: any = [];
  clientesFiltrados: any = [];
  texto : string = '';
  private modalService = inject(NgbModal);

	open(cli : any = null) {
		const modalRef = this.modalService.open(CadClienteComponent);
		modalRef.componentInstance.name = 'World';
    if(cli) {
      modalRef.componentInstance.cliente = cli;
    }

    // Atualizar lista ao fechar o modal (independente de confirmação ou cancelamento)
    modalRef.result.then(
      () => {
        this.loadClientes(); 
      },
      () => {
        this.loadClientes(); 
      }
    );
	}
  loadClientes() {
    this.serv.getClientes().then((data) => {
      console.log(data);
      this.clientes = data;
      this.clientesFiltrados = data;
    });
  }
  

  constructor(private serv: ClientesService) {
    // this.serv.getClientes().then((data) => {
    //   console.log(data);
    //   this.clientes = data;
    //   this.clientesFiltrados = data;
    // });
    this.loadClientes();
  }
  pesquisar() {
    this.clientesFiltrados = this.clientes.filter((cli: any) => {
      return cli.nome.toLowerCase().includes(this.texto.toLowerCase());
    });
  }
  exclui(cli: any) {
    if(confirm('Deseja realmente excluir o cliente ' + cli.nome + '?')) {
      this.serv.excluirCliente(cli.id).then((data) => {
        console.log(data);
        this.serv.getClientes().then((data) => {
          console.log(data);
          this.clientes = data;
          this.clientesFiltrados = data;
        });
      });
    }
  }
}

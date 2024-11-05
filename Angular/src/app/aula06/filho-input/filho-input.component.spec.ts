import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FilhoInputComponent } from './filho-input.component';

describe('FilhoInputComponent', () => {
  let component: FilhoInputComponent;
  let fixture: ComponentFixture<FilhoInputComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [FilhoInputComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(FilhoInputComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

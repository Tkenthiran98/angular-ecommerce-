// checkout.component.ts
import { Component } from '@angular/core';

@Component({
  selector: 'app-checkout',
  templateUrl: './checkout.component.html',
  styleUrls: ['./checkout.component.css']
})
export class CheckoutComponent {
  currentStep = 1;
  selectedPaymentMethod!: string; // Non-null assertion operator
  name: string = ''; // Add this property
  email: string = ''; // Add this property
  address: string = ''; // Add this property
  creditCardNumber: string = ''; // Add this property
  expirationDate: string = ''; // Add this property
  cvv: string = ''; // Add this property
  bankAccountNumber: string = ''; // Add this property

  nextStep(): void {
    this.currentStep++;
  }

  prevStep(): void {
    this.currentStep--;
  }

  placeOrder(): void {
    // Add your logic to place the order
    console.log('Order placed!');
  }
}

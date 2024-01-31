import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product-list',
  templateUrl: './product-list.component.html',
  styleUrls: ['./product-list.component.css']
})
export class ProductListComponent implements OnInit {
  products = [
    { title: 'ASUS 1', price: 19.99, image: '../assets/images/lap/asus.jpg' },
    { title: 'Acer 2', price: 29.99, image: '../assets/images/laptops/1/1.jpg' },
    { title: 'Hp 1', price: 19.99, image: '../assets/images/laptops/1/4.jpg' },
    { title: 'DELL 2', price: 29.99, image: '../assets/images/laptops/1/5.jpg' },
    { title: 'Lenovo 1', price: 19.99, image: '../assets/images/laptops/2/1.jpg' },
    { title: ' MIC 2', price: 29.99, image: '../assets/images/laptops/2/2.jpg' },
    { title: 'Acer 1', price: 19.99, image: '../assets/images/laptops/2/3.jpg' },
    { title: 'Hp 2', price: 29.99, image: '../assets/images/laptops/1/1.jpg' },
    { title: 'Hp 1', price: 19.99, image: '../assets/images/laptops/1/3.jpg' },
     // Add more products as needed
  ];

  constructor() { }

  ngOnInit(): void {
  }

  buyNow(): void {
    // Add your logic for the "Buy Now" action
    console.log('Buy Now clicked!');
  }
}

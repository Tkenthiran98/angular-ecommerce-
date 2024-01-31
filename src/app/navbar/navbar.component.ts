import { Component, OnInit } from '@angular/core';
import { AuthService } from '../_services/auth.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  user: any; // Assuming you have a user object

  constructor(public auth: AuthService) { }

  ngOnInit(): void {
    this.fetchUserDetails();
  }

  fetchUserDetails() {
    this.auth.detail().subscribe(
      response => {
        this.user = response.users[0];
      },
      error => {
        console.error('Error fetching user details:', error);
      }
    );
  }

  logout() {
    this.auth.removeToken();
    this.auth.canAccess();
  }
}

this.toastr.error('Please Login and you will add to your wishlist ', 'Eroor ::');


this.router.navigate(['/login'], { queryParams: { returnUrl: 'destination/' + this.activatedRoute.snapshot.params.destinationName + '/' + this.activatedRoute.snapshot.params.destinationId }});
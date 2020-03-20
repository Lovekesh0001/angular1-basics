How to handle query parameters in a router link. One of:

merge : Merge new with current parameters.
preserve : Preserve current parameters.
type QueryParamsHandling = 'merge' | 'preserve' | '';



=======================================================================

homedetails.component.ts
import { ActivatedRoute, Router, paramMap } from '@angular/router';


homeId = '';
constructor(private activatedRoute: ActivatedRoute, private router: Router){}
ngOnInit() {

  this.activatedRoute.queryParamMap.subscribe((queryParamMap) => {
    if (queryParamMap.get('page')) {
        this.page = queryParamMap.get('page');
      }

      if (queryParamMap.get('orderBy')) {
        this.orderByval = queryParamMap.get('orderBy');
      }
  })

}

orderBy(value) {
  this.config.currentPage = 1;
  this.router.navigate(['/destination', this.homeName, this.homeId ], { queryParams: { orderBy: value, page: 1 },
    queryParamsHandling: 'merge' });
}    
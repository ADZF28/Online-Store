import { Component, OnInit, OnDestroy } from '@angular/core';
import noUiSlider from "nouislider";
@Component({
  selector: 'app-nosotros',
  templateUrl: './nosotros.component.html',
  styleUrls: ['./nosotros.component.scss']
})
export class NosotrosComponent implements OnInit {
  isCollapsed = true;
  focus;
  focus1;
  focus2;
  date = new Date();
  pagination = 3;
  pagination1 = 1;
  constructor() {}
  scrollToDownload(element: any) {
    element.scrollIntoView({ behavior: "smooth" });
  }
  Personal: any=[
    {
      "nombre": "Diego Loor",
      "descricion": "Desarrolador de paginas Web",
      "ruta": "assets/img/ryan.jpg"
  },
  {
      "nombre": "Dario Zambrano",
      "descricion": "Desarrolador de App Moviles",
      "ruta": "assets/img/james.jpg"
  },
  {
      "nombre": "Angel Moreira",
      "descricion": "Ingeniero de software",
      "ruta": "assets/img/lora.jpg"
  },
  {
    "nombre": "Daza Mera",
    "descricion": "Fisico Matematico",
    "ruta": "assets/img/mike.jpg"
  }
  ];
  
  ngOnInit(): void {
    var body = document.getElementsByTagName("body")[0];
    body.classList.add("index-page");

    var slider = document.getElementById("sliderRegular");

    noUiSlider.create(slider, {
      start: 40,
      connect: false,
      range: {
        min: 0,
        max: 100
      }
    });

    var slider2 = document.getElementById("sliderDouble");

    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  }
  ngOnDestroy() {
    var body = document.getElementsByTagName("body")[0];
    body.classList.remove("index-page");
  }

}




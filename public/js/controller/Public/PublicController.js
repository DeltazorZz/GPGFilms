import Adatmodel from "../../model/Adatmodel.js";
import Home from "../../view/Public/Home.js";
import Nav from "../../view/Public/Nav.js";



class PublicController {
    constructor() {
        console.log('hello');
        const token = $('meta[name="csrf-token"]').attr("content");
        const adatmodel = new Adatmodel(token);
        this.Nav();
        this.Home();



    }
    Home(){
      console.log('szotyi');
      const szuloElem = $('main')
      new Home(szuloElem);
    }
    Nav(){
      const szuloElem = $('nav');
      new Nav(szuloElem);
    }
}
export default PublicController;

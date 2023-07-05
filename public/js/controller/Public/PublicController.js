import Adatmodel from "../../model/Adatmodel.js";
import Home from "../../view/Public/Home.js";

class PublicController {
    constructor() {
        console.log('hello');
        const token = $('meta[name="csrf-token"]').attr("content");
        const adatmodel = new Adatmodel(token);

        this.Home



    }
    Home(){
      const szuloElem = $('#main')
      new Home(szuloElem);
    }
}
export default PublicController;

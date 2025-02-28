$(document).ready( function() {

    //insertar.php
    $("#clave").focus();

    //editar.php
    let copias = $("#cop").val();
    let id     = parseInt( $("#id").val() );

      if(copias < 1 || copias == "NA" || copias == "nA" || copias == "Na" || copias == "") {

          $("#controladas").hide();

      }//if
      else {
        
          //Copias controladas
          let JefLab           = "-Jefe del Laboratorio Analítico";
          let GerAseguramiento = "-Gerente de Aseguramiento de la Calidad";
          let Aseguramiento    = "-Jefe de Aseguramiento de la Calidad";
          let Validacion       = "-Gerente de Validación";
          let Sanitario        = "-Responsable Sanitario";
          let EncarSolidos     = "-Encargado de Sólidos";
          let EncarSemSolidos  = "-Encargado de SemiSólidos";
          let EncarLiq         = "-Encargado de Líquidos";
          let EncarAcond       = "-Encargado de Acondicionamiento";
          let EncarCosm        = "-Encargado de Cosméticos";
          let EncarAlm         = "-Encargado de Almacén de materia prima y materiales";
          let EncarAlmPT       = "-Encargado de Almacén de producto terminado";
          let EncarMant        = "-Encargado de Mantenimiento";
          let JefValidacion    = "-Jefe de Validación e Ingeniería";
          let SegSalud         = "-Responsable de Seguridad y Salud en el Trabajo";

            switch(id) {

                case 2: //arquitectonico Laboratorio analítico
                    $("#controladas").val(JefLab);
                break;

                case 32: //tránsito de equipo móvil
                    $("#controladas").val(Sanitario + "\n" + Aseguramiento);
                break

                case 34: //clasificación áreas de acuerdo a la norma 059
                    $("#controladas").val(Aseguramiento);
                break;

                case 35: //flujo personal fab. por departamentos
                    $("#controladas").val(EncarSolidos + "\n" + EncarSemSolidos + "\n" + EncarLiq + "\n" + EncarAcond + "\n" + EncarAlm + "\n" + EncarCosm);  
                break;

                case 36: //flujo materias prim. áreas de fabricación
                    $("#controladas").val(EncarSolidos + "\n" + EncarSemSolidos + "\n" + EncarLiq + "\n" + EncarAcond + "\n" + EncarCosm);                      
                break;

                case 37: //flujo mat. acondicionamiento áres de fabricación
                    $("#controladas").val(EncarSolidos + "\n" + EncarSemSolidos + "\n" + EncarLiq + "\n" + EncarAcond + "\n" + EncarCosm);
                break;

                case 38: //flujo personal áreas y otras instalaciones PLANO CANCELADO
                    $("#controladas").val(EncarSolidos + "\n" + EncarSemSolidos + "\n" + EncarLiq + "\n" + EncarAcond + "\n" + EncarAlm + "\n" + EncarCosm);
                break;

                case 39: //flujo procesos de fab.
                    $("#controladas").val(EncarSolidos + "\n" + EncarSemSolidos + "\n" + EncarLiq + "\n" + EncarAcond + "\n" + EncarAlm + "\n" + EncarCosm);
                break;

                case 42: //drenaje pluvial
                    $("#controladas").val(SegSalud);
                break;

                case 43: //drenaje en planta
                    $("#controladas").val(SegSalud + "(2)");  
                break;

                case 47: //residous peligrosos
                    $("#controladas").val(JefLab);
                break;

                case 48: //flujo Gas LP 
                    $("#controladas").val(SegSalud);
                break;

                case 49: //extintores planta alta
                    $("#controladas").val(SegSalud + "(2)");
                break;

                case 50: //extintores planta baja
                    $("#controladas").val(SegSalud + "(2)");
                break;

                case 51: //atención e emergencias alta
                    $("#controladas").val(SegSalud + "(2)");
                break;

                case 52: //atención e emergencias baja
                    $("#controladas").val(SegSalud + "(2)");
                break;

                case 56: //aire acondicionado HVAC
                    $("#controladas").val(Aseguramiento);
                break;

                case 59: //HVAC parte II
                    $("#controladas").val(Sanitario);  
                break;

                case 62: //Diagrama DTI tuberías
                    $("#controladas").val(Validacion + "\n" + Sanitario + "(2)");
                break;

                case 63: //agua purificada nivel 1 LOOP
                    $("#controladas").val(GerAseguramiento + "(4)");  
                break;

                case 70: //charolas adherentes lamp UV
                    $("#controladas").val(SegSalud + "\n" + JefValidacion + "\n" + EncarMant + "\n" + EncarAlm + "\n" + EncarAlmPT);  
                break;

                case 71: //cebaderos y trampas 
                    $("#controladas").val(SegSalud + "\n" + JefValidacion + "\n" + EncarMant + "\n" + EncarAlm + "\n" + EncarAlmPT);  
                break;

                case 72: //áreas aplicación plaguicidas
                    $("#controladas").val(SegSalud + "\n" + JefValidacion + "\n" + EncarMant + "\n" + EncarAlm + "\n" + EncarAlmPT);  
                break;

            }//switch

        }//else

});//ready
//  MODELE RELATIONEL

Commercant("matricule",#idAgent)
Contrats("idContrats",#matricule,#idPlace)
users("idAgent")
Place("idPlace",#idSecteur,#idLogis)
SecteurVente("idSecteur")
Logis("idLogis")
Payement("idPayement",#idContrats)


alter table commercants ALTER email  DROP  NOT NULL;


insert into users(name,prenom,datenaiss,quartier,tel,ville,statut,email,password) values( 'Admin','Admin','2000-05-27','Koma2','90560777','Sokode','admin', 'admin@lightbp.com' ,'$2y$10$NVcDQFAXFVGu17lcuIHv/O7T9wD7SA3ZP2cgitg65rOEpBWva/zsS');

insert into logis(libelle,prixLogis) values( 'Boutique',2500);
insert into logis(libelle,prixLogis) values( 'Hangard',3000);
insert into logis(libelle,prixLogis) values( 'Etalage',1500);

$request->email==null?$request->email:null,




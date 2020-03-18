drop table if exists Apprenants;

drop table if exists Tuteur;

/*==============================================================*/
/* Table: Apprenants                                            */
/*==============================================================*/
create table Apprenants
(
   idApprenant          int not null auto_increment,
   idTuteur             int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   dateNaissance        date,
   villeDorigine        varchar(254),
   formation            varchar(254),
   etablissementPrecedent varchar(254),
   telephone            numeric(8,0),
   email                varchar(254),
   genre                varchar(50),
   photo                varchar(254),
   primary key (idApprenant)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   idTuteur             int not null auto_increment,
   nom                  varchar(254),
   prenom               varchar(254),
   profession           varchar(254),
   telephone            numeric(8,0),
   primary key (idTuteur)
);

alter table Apprenants add constraint FK_association1 foreign key (idTuteur)
      references Tuteur (idTuteur) on delete restrict on update restrict;

CREATE TABLE tt_content (
	tx_addresses_personnel int(1) DEFAULT '0' NOT NULL,
	tx_personnel_addresses int(1) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_addresses_domain_model_address (
	tx_personnel tinytext,
);

CREATE TABLE tx_personnel_domain_model_person (
	tx_addresses tinytext,
);


CREATE TABLE tx_addresses_personnel_mm (
    uid_local int(11) DEFAULT '0' NOT NULL,
    uid_foreign int(11) DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    sorting_foreign int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid_local, uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
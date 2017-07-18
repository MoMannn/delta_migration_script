This is a really simple and straightforward script. It was quickly written and is not optimized. 

Its puprose is to solve a mistake I made while migrating from magento 1 to magento 2 using data migration tool.

The mistake I made was making a dump of the magento 1 database using data migration to migrate to magento 2 then after a month or two of setting up the magento 2 store I tried to migrate the changes using delta migration and only then realised how it actually works. So I wrote this script to fill the m2_cl_* tables in magento 1 database with missing data so that delta migration could be established. 

The script connects to the dump of magento 1 sql database and the live magento 1 database, checks the differences and adds them to the live magento 1 m2_cl_* tables as insert statements. 

The script only fills the missing data, it does not know anything about changes to the existing data and I advise you use it with caution.
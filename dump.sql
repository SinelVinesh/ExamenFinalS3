--
-- PostgreSQL database dump
--

-- Dumped from database version 14.0
-- Dumped by pg_dump version 14.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: benef_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.benef_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.benef_s OWNER TO exams3_user;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: benef; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.benef (
    id_benef character varying(7) DEFAULT concat('BEN', lpad((nextval('public.benef_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    nom_benef character varying(50) NOT NULL
);


ALTER TABLE public.benef OWNER TO exams3_user;

--
-- Name: budget_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.budget_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.budget_s OWNER TO exams3_user;

--
-- Name: budget; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.budget (
    id_budget character varying(7) DEFAULT concat('BUD', lpad((nextval('public.budget_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    date_budget date NOT NULL,
    montant_budget real NOT NULL,
    id_categorie character varying(7) NOT NULL
);


ALTER TABLE public.budget OWNER TO exams3_user;

--
-- Name: categorie_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.categorie_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categorie_s OWNER TO exams3_user;

--
-- Name: categorie; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.categorie (
    id_categorie character varying(7) DEFAULT concat('CAT', lpad((nextval('public.categorie_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    type_categorie character varying(50) NOT NULL
);


ALTER TABLE public.categorie OWNER TO exams3_user;

--
-- Name: depenses_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.depenses_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.depenses_s OWNER TO exams3_user;

--
-- Name: depenses; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.depenses (
    id_depenses character varying(7) DEFAULT concat('DEP', lpad((nextval('public.depenses_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    date_depenses date NOT NULL,
    id_benef character varying(7) NOT NULL,
    montant_depenses real NOT NULL,
    id_categorie character varying(7) NOT NULL
);


ALTER TABLE public.depenses OWNER TO exams3_user;

--
-- Name: entree_imprevu_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.entree_imprevu_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.entree_imprevu_s OWNER TO exams3_user;

--
-- Name: entree_imprevu; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.entree_imprevu (
    id_in_imprevu character varying(7) DEFAULT concat('IMP', lpad((nextval('public.entree_imprevu_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    date_in_imprevu date NOT NULL,
    montant_in_imprevu real NOT NULL
);


ALTER TABLE public.entree_imprevu OWNER TO exams3_user;

--
-- Name: salaire_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.salaire_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.salaire_s OWNER TO exams3_user;

--
-- Name: salaire; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.salaire (
    id_salaire character varying(7) DEFAULT concat('SAL', lpad((nextval('public.salaire_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    date_salaire date NOT NULL,
    id_utilisateur character varying(7) NOT NULL,
    montant_salaire real NOT NULL
);


ALTER TABLE public.salaire OWNER TO exams3_user;

--
-- Name: user_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.user_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_s OWNER TO exams3_user;

--
-- Name: utilisateur_s; Type: SEQUENCE; Schema: public; Owner: exams3_user
--

CREATE SEQUENCE public.utilisateur_s
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.utilisateur_s OWNER TO exams3_user;

--
-- Name: utilisateur; Type: TABLE; Schema: public; Owner: exams3_user
--

CREATE TABLE public.utilisateur (
    id_utilisateur character varying(7) DEFAULT concat('USR', lpad((nextval('public.utilisateur_s'::regclass))::text, 4, '0'::text)) NOT NULL,
    nom_utilisateur character varying(50) NOT NULL,
    login_utilisateur character varying(255) NOT NULL,
    password_utilisateur character varying(255) NOT NULL,
    admin boolean DEFAULT false
);


ALTER TABLE public.utilisateur OWNER TO exams3_user;

--
-- Data for Name: benef; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.benef (id_benef, nom_benef) FROM stdin;
BEN0001	Famille
BEN0002	Papa
BEN0003	Maman
BEN0004	Enfant
BEN0005	Koto
\.


--
-- Data for Name: budget; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.budget (id_budget, date_budget, montant_budget, id_categorie) FROM stdin;
BUD0001	2022-01-30	200000	CAT0001
BUD0002	2022-01-30	400000	CAT0002
BUD0003	2022-01-30	500000	CAT0003
BUD0004	2022-01-30	100000	CAT0004
BUD0005	2022-01-30	500000	CAT0005
BUD0006	2022-02-28	200000	CAT0001
BUD0007	2022-02-28	400000	CAT0002
BUD0008	2022-02-28	500000	CAT0003
BUD0009	2022-02-28	100000	CAT0004
BUD0010	2022-02-28	500000	CAT0005
\.


--
-- Data for Name: categorie; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.categorie (id_categorie, type_categorie) FROM stdin;
CAT0001	nourriture
CAT0002	deplacement
CAT0003	loyer
CAT0004	divertissement
CAT0005	education
\.


--
-- Data for Name: depenses; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.depenses (id_depenses, date_depenses, id_benef, montant_depenses, id_categorie) FROM stdin;
DEP0001	2022-01-01	BEN0001	50000	CAT0001
DEP0002	2022-01-15	BEN0001	150000	CAT0001
DEP0003	2022-01-26	BEN0002	100000	CAT0002
DEP0004	2022-01-29	BEN0002	100000	CAT0002
DEP0005	2022-01-01	BEN0001	500000	CAT0003
DEP0006	2022-01-11	BEN0005	50000	CAT0004
DEP0007	2022-01-01	BEN0004	500000	CAT0005
DEP0008	2022-02-01	BEN0001	50000	CAT0001
DEP0009	2022-02-15	BEN0001	150000	CAT0001
DEP0010	2022-02-26	BEN0002	100000	CAT0002
DEP0011	2022-02-28	BEN0002	100000	CAT0002
DEP0012	2022-02-01	BEN0001	500000	CAT0003
DEP0013	2022-02-11	BEN0005	50000	CAT0004
DEP0014	2022-02-01	BEN0004	500000	CAT0005
\.


--
-- Data for Name: entree_imprevu; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.entree_imprevu (id_in_imprevu, date_in_imprevu, montant_in_imprevu) FROM stdin;
IMP0001	2022-01-16	200000
IMP0002	2022-02-19	100000
\.


--
-- Data for Name: salaire; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.salaire (id_salaire, date_salaire, id_utilisateur, montant_salaire) FROM stdin;
SAL0001	2021-09-30	USR0001	4e+06
SAL0002	2021-09-30	USR0002	200000
SAL0003	2021-10-30	USR0001	4e+06
SAL0004	2021-10-30	USR0002	200000
SAL0005	2021-11-30	USR0001	4e+06
SAL0006	2021-11-30	USR0002	200000
SAL0007	2021-12-30	USR0001	4e+06
SAL0008	2021-12-30	USR0002	200000
SAL0009	2022-01-30	USR0001	4.5e+06
SAL0010	2022-01-30	USR0002	100000
SAL0011	2022-02-28	USR0001	4.5e+06
SAL0012	2022-02-28	USR0002	100000
\.


--
-- Data for Name: utilisateur; Type: TABLE DATA; Schema: public; Owner: exams3_user
--

COPY public.utilisateur (id_utilisateur, nom_utilisateur, login_utilisateur, password_utilisateur, admin) FROM stdin;
USR0001	Papa	Papa	Papa	t
USR0002	Maman	Maman	Maman	f
USR0003	Enfant1	Enfant1	Enfant1	f
USR0004	Enfant2	Enfant2	Enfant2	f
USR0005	Enfant3	Enfant3	Enfant3	f
USR0006	Tonton	Tonton	Tonton	f
\.


--
-- Name: benef_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.benef_s', 10, true);


--
-- Name: budget_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.budget_s', 21, true);


--
-- Name: categorie_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.categorie_s', 14, true);


--
-- Name: depenses_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.depenses_s', 14, true);


--
-- Name: entree_imprevu_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.entree_imprevu_s', 2, true);


--
-- Name: salaire_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.salaire_s', 24, true);


--
-- Name: user_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.user_s', 1, false);


--
-- Name: utilisateur_s; Type: SEQUENCE SET; Schema: public; Owner: exams3_user
--

SELECT pg_catalog.setval('public.utilisateur_s', 24, true);


--
-- Name: benef benef_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.benef
    ADD CONSTRAINT benef_pkey PRIMARY KEY (id_benef);


--
-- Name: budget budget_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.budget
    ADD CONSTRAINT budget_pkey PRIMARY KEY (id_budget);


--
-- Name: categorie categorie_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.categorie
    ADD CONSTRAINT categorie_pkey PRIMARY KEY (id_categorie);


--
-- Name: depenses depenses_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.depenses
    ADD CONSTRAINT depenses_pkey PRIMARY KEY (id_depenses);


--
-- Name: entree_imprevu entree_imprevu_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.entree_imprevu
    ADD CONSTRAINT entree_imprevu_pkey PRIMARY KEY (id_in_imprevu);


--
-- Name: salaire salaire_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.salaire
    ADD CONSTRAINT salaire_pkey PRIMARY KEY (id_salaire);


--
-- Name: utilisateur utilisateur_pkey; Type: CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.utilisateur
    ADD CONSTRAINT utilisateur_pkey PRIMARY KEY (id_utilisateur);


--
-- Name: budget budget_id_categorie_fkey; Type: FK CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.budget
    ADD CONSTRAINT budget_id_categorie_fkey FOREIGN KEY (id_categorie) REFERENCES public.categorie(id_categorie);


--
-- Name: depenses depenses_id_benef_fkey; Type: FK CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.depenses
    ADD CONSTRAINT depenses_id_benef_fkey FOREIGN KEY (id_benef) REFERENCES public.benef(id_benef);


--
-- Name: depenses depenses_id_categorie_fkey; Type: FK CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.depenses
    ADD CONSTRAINT depenses_id_categorie_fkey FOREIGN KEY (id_categorie) REFERENCES public.categorie(id_categorie);


--
-- Name: salaire salaire_id_utilisateur_fkey; Type: FK CONSTRAINT; Schema: public; Owner: exams3_user
--

ALTER TABLE ONLY public.salaire
    ADD CONSTRAINT salaire_id_utilisateur_fkey FOREIGN KEY (id_utilisateur) REFERENCES public.utilisateur(id_utilisateur);


--
-- PostgreSQL database dump complete
--


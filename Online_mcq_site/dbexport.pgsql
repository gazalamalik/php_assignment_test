--
-- PostgreSQL database dump
--

-- Dumped from database version 10.16
-- Dumped by pg_dump version 10.16

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
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: admin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.admin (
    id integer NOT NULL,
    username character varying(20),
    password character varying(10)
);


ALTER TABLE public.admin OWNER TO postgres;

--
-- Name: admin_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.admin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.admin_id_seq OWNER TO postgres;

--
-- Name: admin_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.admin_id_seq OWNED BY public.admin.id;


--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.category (
    id integer NOT NULL,
    cat_name character varying(40) NOT NULL
);


ALTER TABLE public.category OWNER TO postgres;

--
-- Name: category_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.category_id_seq OWNER TO postgres;

--
-- Name: category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.category_id_seq OWNED BY public.category.id;


--
-- Name: login; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.login (
    id integer NOT NULL,
    username character varying(100),
    password character varying(10)
);


ALTER TABLE public.login OWNER TO postgres;

--
-- Name: login_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.login_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.login_id_seq OWNER TO postgres;

--
-- Name: login_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.login_id_seq OWNED BY public.login.id;


--
-- Name: options; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.options (
    question_id integer,
    q_type character varying(50),
    option_id integer NOT NULL,
    option_title character varying(80),
    is_answer integer DEFAULT 0
);


ALTER TABLE public.options OWNER TO postgres;

--
-- Name: options_option_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.options_option_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.options_option_id_seq OWNER TO postgres;

--
-- Name: options_option_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.options_option_id_seq OWNED BY public.options.option_id;


--
-- Name: question; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.question (
    user_id integer,
    question_id integer NOT NULL,
    q_type character varying(50),
    created_at timestamp with time zone DEFAULT CURRENT_TIMESTAMP,
    status integer DEFAULT 1,
    topic character varying(50),
    question character varying(200),
    duration integer
);


ALTER TABLE public.question OWNER TO postgres;

--
-- Name: question2; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.question2 (
    id integer NOT NULL,
    question character varying(100),
    ans1 character varying(100),
    ans2 character varying(100),
    ans3 character varying(100),
    ans4 character varying(100),
    ans integer,
    cat_id integer
);


ALTER TABLE public.question2 OWNER TO postgres;

--
-- Name: question2_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.question2_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.question2_id_seq OWNER TO postgres;

--
-- Name: question2_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.question2_id_seq OWNED BY public.question2.id;


--
-- Name: question_question_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.question_question_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.question_question_id_seq OWNER TO postgres;

--
-- Name: question_question_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.question_question_id_seq OWNED BY public.question.question_id;


--
-- Name: ragister; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ragister (
    id integer NOT NULL,
    username character varying(100),
    email character varying(20),
    password character varying(10)
);


ALTER TABLE public.ragister OWNER TO postgres;

--
-- Name: ragister_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.ragister_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.ragister_id_seq OWNER TO postgres;

--
-- Name: ragister_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.ragister_id_seq OWNED BY public.ragister.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    username text NOT NULL,
    email character varying(255) NOT NULL,
    password text NOT NULL,
    role text NOT NULL,
    status integer NOT NULL,
    created_at timestamp with time zone DEFAULT now() NOT NULL,
    updated_at timestamp with time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: admin id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admin ALTER COLUMN id SET DEFAULT nextval('public.admin_id_seq'::regclass);


--
-- Name: category id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category ALTER COLUMN id SET DEFAULT nextval('public.category_id_seq'::regclass);


--
-- Name: login id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.login ALTER COLUMN id SET DEFAULT nextval('public.login_id_seq'::regclass);


--
-- Name: options option_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.options ALTER COLUMN option_id SET DEFAULT nextval('public.options_option_id_seq'::regclass);


--
-- Name: question question_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question ALTER COLUMN question_id SET DEFAULT nextval('public.question_question_id_seq'::regclass);


--
-- Name: question2 id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question2 ALTER COLUMN id SET DEFAULT nextval('public.question2_id_seq'::regclass);


--
-- Name: ragister id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ragister ALTER COLUMN id SET DEFAULT nextval('public.ragister_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: admin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.admin (id, username, password) FROM stdin;
1	Gazala Malik	1234
\.


--
-- Data for Name: category; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.category (id, cat_name) FROM stdin;
1	php
2	html
3	java
4	javascript
5	css
\.


--
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.login (id, username, password) FROM stdin;
1	admin	admin@123
\.


--
-- Data for Name: options; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.options (question_id, q_type, option_id, option_title, is_answer) FROM stdin;
2	single	1	is a programe	0
2	single	2	is a program that is used in front end 	1
2	single	3	is a country name 	0
2	single	4	is a programe	0
4	single	5	is a programe	0
4	single	6	is not a program 	0
2	single	7	is a program that is used in front end 	1
4	single	8	is a program that is used in front end 	1
5	single	9	html	0
5	single	10	www	0
5	single	11	http	1
6	single	12	Asynchronous Javascript and XML	1
6	single	13	Abstract JSON and XML	0
6	single	14	Another Java Abstraction for X-Windows	0
7	single	15	It works as a stand-alone Web-development tool	0
7	single	16	 It works the same with all Web browsers.	0
7	single	17	 It makes data requests asynchronously.	1
8	single	18	It&#8217;s the programming language used to develop Ajax applications.	0
8	single	19	It provides a means of exchanging structured .	0
8	single	20	It provides the ability to asynchronously.	1
2	single	21	java is a programming language.	1
2	single	22	java is a front end language.	0
2	single	23	java is like a javascript.	0
9	single	24	java is like a javascript.	0
9	single	25	java is like a javascript.	0
9	single	26	java is a programming language.	1
10	single	27	a class is a collection of object.	1
10	single	28	a class is a object.	0
10	single	29	a class is a method.	0
11	single	30	constructor is like a methid with same name as class.	1
11	single	31	constructor is a program.	0
11	single	32	constructor is a pies of code .	0
\.


--
-- Data for Name: question; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.question (user_id, question_id, q_type, created_at, status, topic, question, duration) FROM stdin;
\N	2	single	2021-05-06 08:13:37.365804-04	1	ajax	what is ajax ?	1
8	4	single	2021-05-06 08:15:56.561676-04	1	ajax	what is ajax ?	1
8	5	single	2021-05-06 08:17:54.44783-04	1	ajax	what sever support ajax ?	1
8	6	single	2021-05-06 08:19:07.198152-04	1	ajax	 ajax stands for: ?	1
8	7	single	2021-05-06 08:19:41.427022-04	1	ajax	 what makes ajax unique? ?	1
8	8	single	2021-05-06 08:20:10.800281-04	1	ajax	 What does the XMLHttpRequest object accomplish in Ajax? 	1
2	9	single	2021-05-06 11:09:50.754792-04	1	java	what is java?	1
2	10	single	2021-05-06 11:10:48.524789-04	1	java	what is a class in java?	0
2	11	single	2021-05-06 11:11:27.744704-04	1	java	what do you know about the constructor?	0
\.


--
-- Data for Name: question2; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.question2 (id, question, ans1, ans2, ans3, ans4, ans, cat_id) FROM stdin;
1	What does PHP stand for?	personal hypertext processor	php:hypertext preprocessor	private home page 	none of them	0	1
2	php server script are surrounded by delimiters, which ?	<script>..</script>	<&>..</&>	<?php...?> 	<?php>...</?>	1	1
3	how do you write "hello World " in php?	"hello world"	echo "hello world "	Document.Write("hello world") 	none of them 	0	1
4	All Variables in php start with which symbol ?	$	&	!	none of these	1	1
5	The php syntax is most similer to :	VBScriot	perl and c	JavaScriot	none of these	0	1
6	How do you get information from a form that us submitted using "get" method?	$_GET[];	Request.Form;	Request.QueryString;	none of these	1	1
\.


--
-- Data for Name: ragister; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ragister (id, username, email, password) FROM stdin;
1	Gazala Malik	mahi@gmail.com	1234
2	Gazala Malik	mahi@gmail.com	1234
3	Mahira	mahi@gmail.com	1234
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, username, email, password, role, status, created_at, updated_at) FROM stdin;
8	mahi	mahi@gmail.com	mahi@123	user	1	2021-05-04 15:06:15.68707-04	2021-05-04 15:06:15.68707-04
10	aani	aani@gmail.com	1345	user	1	2021-05-05 06:42:01.108398-04	2021-05-05 06:42:01.108398-04
7	sakshi	sakshi@gmail.com	sakshi123	user	1	2021-05-04 14:36:32.666301-04	2021-05-04 14:36:32.666301-04
2	Gazala Malik	gazalamalik2277@gmail.com	1234	admin	1	2021-05-04 14:20:00.657085-04	2021-05-04 14:20:00.657085-04
11	sam	sam@gmail.com	sam2277	user	1	2021-05-07 12:26:33.458141-04	2021-05-07 12:26:33.458141-04
\.


--
-- Name: admin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.admin_id_seq', 1, true);


--
-- Name: category_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.category_id_seq', 1, false);


--
-- Name: login_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.login_id_seq', 1, true);


--
-- Name: options_option_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.options_option_id_seq', 32, true);


--
-- Name: question2_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.question2_id_seq', 1, false);


--
-- Name: question_question_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.question_question_id_seq', 11, true);


--
-- Name: ragister_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.ragister_id_seq', 3, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 11, true);


--
-- Name: admin admin_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (id);


--
-- Name: category category_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);


--
-- Name: login login_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (id);


--
-- Name: options options_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.options
    ADD CONSTRAINT options_pkey PRIMARY KEY (option_id);


--
-- Name: question2 question2_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question2
    ADD CONSTRAINT question2_pkey PRIMARY KEY (id);


--
-- Name: question question_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question
    ADD CONSTRAINT question_pkey PRIMARY KEY (question_id);


--
-- Name: ragister ragister_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ragister
    ADD CONSTRAINT ragister_pkey PRIMARY KEY (id);


--
-- Name: users users_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users users_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_key UNIQUE (username);


--
-- Name: question id; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.question
    ADD CONSTRAINT id FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: options qid; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.options
    ADD CONSTRAINT qid FOREIGN KEY (question_id) REFERENCES public.question(question_id);


--
-- PostgreSQL database dump complete
--


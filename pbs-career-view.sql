create view vw_katudou as
SELECT DISTINCT u.uid, s.sid, uname as sname, sex, slab, lbname, status, aid, adate, company, jobtype, result, decision, a.detail, next, memo, careertype, w.detail as wish
from tb_user u, tb_student s, tb_activity a, tb_wish w, tb_lab b
where u.uid=s.uid and s.sid=a.sid and s.sid=w.sid and b.lbid=slab;


create view vw_gakusei as
SELECT s.*, u.uname as sname, u.email, u.tel, b.lbname
from tb_user u, tb_student s, tb_lab b
where u.uid=s.uid and s.slab=b.lbid

create view vw_katudou as
SELECT DISTINCT u.uid, s.sid, uname as sname, sex, slab, lbname, status, aid, adate, company, jobtype, result, decision, a.detail, next, memo
from tb_user u, tb_student s, tb_activity a, tb_lab b
where u.uid=s.uid and s.sid=a.sid and b.lbid=slab



create view vw_jogen as
SELECT g.sid,sname, lbname, vdate, u.uname as staff_name, content, staff_id
FROM tb_user u, vw_gakusei g,tb_advice v
WHERE g.sid=v.sid and u.uid=v.staff_id
using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Task
{
    #region Task
    public class Task
    {
        #region Member Variables
        protected int _task_id;
        protected string _task_name;
        protected unknown _date_todo;
        protected string _status;
        #endregion
        #region Constructors
        public Task() { }
        public Task(string task_name, unknown date_todo, string status)
        {
            this._task_name=task_name;
            this._date_todo=date_todo;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Task_id
        {
            get {return _task_id;}
            set {_task_id=value;}
        }
        public virtual string Task_name
        {
            get {return _task_name;}
            set {_task_name=value;}
        }
        public virtual unknown Date_todo
        {
            get {return _date_todo;}
            set {_date_todo=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}
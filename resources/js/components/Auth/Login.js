import { Form, Icon, Input, Button, Checkbox, Layout, Row, Col } from "antd";
import React, { Component } from "react";
import axios from "axios";
import { Redirect } from "react-router-dom";

const FormItem = Form.Item;
const { Content } = Layout;

class Login extends Component {
    constructor(props) {
        super(props);
        this.state = { email: "", password: "", loggedIn: false };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    componentDidMount() {
        if (window.token) {
            this.setState({ loggedIn: true });
        }
    }

    handleChange(event) {
        let name = event.target.name;
        let value = event.target.value;
        console.log(name, value);
        let data = [];
        data[name] = value;
        this.setState(data);
    }

    handleSubmit(event) {
        event.preventDefault();

        window.axios
            .post("/api/auth/login", {
                email: this.state.email,
                password: this.state.password
            })
            .then(response => {
                console.log(response);
                this.setState({ loggedIn: true });
                localStorage.setItem("token", response.data.access_token);
            });
    }

    // handleSubmit(e) {
    //     e.preventDefault();
    //     this.props.form.validateFields((err, values) => {
    //         if (!err) {
    //             console.log("Received values of form: ", values);
    //         }
    //     });
    // }

    render() {
        if (this.state.loggedIn) {
            return <Redirect to="/" />;
        }
        return (
            <Layout>
                <Content style={{ padding: "10px 50px" }}>
                    <Row>
                        <Col span={4} offset={10}>
                            <Form
                                onSubmit={this.handleSubmit}
                                // className="login-form"
                            >
                                <FormItem>
                                    <Input
                                        prefix={
                                            <Icon
                                                type="user"
                                                style={{
                                                    color: "rgba(0,0,0,.25)"
                                                }}
                                            />
                                        }
                                        type="text"
                                        name="email"
                                        value={this.state.email}
                                        placeholder="email"
                                        onChange={this.handleChange}
                                    />
                                </FormItem>
                                <FormItem>
                                    <Input
                                        prefix={
                                            <Icon
                                                type="lock"
                                                style={{
                                                    color: "rgba(0,0,0,.25)"
                                                }}
                                            />
                                        }
                                        name="password"
                                        value={this.state.password}
                                        type="password"
                                        placeholder="Password"
                                        onChange={this.handleChange}
                                    />
                                </FormItem>
                                <FormItem>
                                    <Checkbox>Remember me</Checkbox>
                                    <a className="login-form-forgot" href="">
                                        Forgot password
                                    </a>
                                    <Button
                                        type="primary"
                                        htmlType="submit"
                                        style={{ width: "100%" }}
                                    >
                                        Log in
                                    </Button>
                                    Or <a href="">register now!</a>
                                </FormItem>
                            </Form>
                        </Col>
                    </Row>
                </Content>
            </Layout>
        );
    }
}

export default Login;
